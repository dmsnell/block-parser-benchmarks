<?php

namespace Dmsnell\Tests\Benchmark;

use Dmsnell;

require( __DIR__ . '/../src/SingleFileParser.php');

class SingleFileParserBench {
    private $doc = null;

    public function __construct() {
        $this->doc = file_get_contents( __DIR__ . '/../documents/early-adopting-the-future.html' );
    }

    public function benchEmpty() {
        for ( $i = 0; $i < 3000; $i++ ) {
            $parser = new Dmsnell\WP_Block_Parser();
            $parser->parse( '' );
        }
    }

    public function benchMany() {
        for ( $i = 0; $i < 3000; $i++ ) {
            $parser = new Dmsnell\WP_Block_Parser();
            $parser->parse( $this->doc );
        }
    }

    public function benchSingleton() {
        $parser = new Dmsnell\WP_Block_Parser();

        for ( $i = 0; $i < 3000; $i++ ) {
            $parser->parse( $this->doc );
        }
    }
}