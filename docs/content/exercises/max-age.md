---
title: "max-age"
type: page
---

## Part 1

Request the [max-age](http://localhost:8080/max-age.php) page using the following shell command:

```bash
http http://localhost:8080/max-age.php
```

Note how the timestamp only gets refreshed every 10s.

## Part 2

Now force Varnish to always deliver the current time:

```bash
http http://localhost:8080/max-age.php Cache-control:no-cache
```
