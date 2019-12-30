# mvm

A tool for mapping out and analyzing 2D metroidvania games where progression depends on locks and keys.

## Backend Tools

Laravel IDE symbol maps are auto-generated on `composer update`.

To run tests:

```bash
phpunit
```

To lint the app for style issues (only for the current diff without `-all`):

```bash
composer run lint[-all]
```

To run static analysis:

```bash
composer run psalm
```

See [http://mvm.test/__clockwork](http://mvm.test/__clockwork) to view performance info.

See [http://mvm.test/log-viewer](http://mvm.test/log-viewer) to view the activity log.

See [http://mvm.test/horizon](http://mvm.test/horizon) to view info about queues/workers.

See [https://www.algolia.com/apps/Z0DB271DZ3/dashboard](https://www.algolia.com/apps/Z0DB271DZ3/dashboard) for the Algolia dashboard.

See [https://app.bugsnag.com/axon-interactive/mvm](https://app.bugsnag.com/axon-interactive/mvm) for the Bugsnag dashboard.

See [https://cloudinary.com/console/welcome](https://cloudinary.com/console/welcome) for the Cloudinary dashboard.
