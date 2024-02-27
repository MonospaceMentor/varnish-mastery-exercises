---
title: querysort
---

## Background

Sorting the query parameters can help optimizing cache storage efficiency.

Varnish comes with a VMOD that makes this easy.

## Exercise

1. Copy `vcl/default.vcl` to `default.vcl` and reload.
2. Experiment with query parameters in different orders using [params.php](http://localhost:8080/params.php).
3. Copy `vcl/querysort.vcl` to `default.vcl` and reload.
4. Experiment again using [params.php](http://localhost:8080/params.php).

