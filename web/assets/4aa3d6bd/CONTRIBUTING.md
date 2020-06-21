# Contributing

For running the tests, you will need:

* Ruby 1.9.3+ with Bundler
* PhantomJS (for headless testing)

First run bootstrap to ensure necessary dependencies:

```
$ script/bootstrap
```

Then run headless tests in the console:

```
$ script/id [<id-file>]
```

To run tests in other browsers, start a server:

```
$ script/server
# now open http://localhost:4567/
```

## Test structure

There are 3 main id modules:

* `id/unit/fn_pjax.js` - Primarily tests the `$.fn.pjax` method and its options
* `id/unit/pjax.js` - Main comprehensive pjax functionality tests
* `id/unit/pjax_fallback.js` - Tests that verify same result after navigation
  even if pjax is disabled (like for browsers that don't support pushState).

Each id drives a hidden id page in an `<iframe>`. See other tests to see how
they trigger pjax by using the `frame` reference and remember to do so as well.
