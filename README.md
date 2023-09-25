## Naive benchmarks of WordPress Block Parser

Pick a document to test against, update the test runners to load it.

```bash
composer install

# Pick whatever revs and iterations counts you want.
vendor/bin/phpbench run tests/*.php --report=aggregate --revs=3 --iterations=5
```

### Documents

There is a small collection of testing documents in my [dmsnell/gutenberg-document-library](https://github.com/dmsnell/gutenberg-document-library) repo.
