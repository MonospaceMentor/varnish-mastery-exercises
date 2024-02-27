---
title: cache_result
description: Add VCL to get cache lookup results in an HTTP header.
---

## Background

In the `vcl_deliver` stage, you can tell if the response in `resp` came from a successful cache lookup by checking `obj.hits`. If the lookup was a miss, it's zero — the object came fresh from the backend. If the lookup was a hit, the value of `obj.hits` is greater than zero.

## Exercise

Extend `vcl_deliver` to achieve the following result:

- If the response came directly from the backend, set the HTTP header `X-Cache` to "MISS".
- If the response comes from the cache, set the HTTP header `X-Cache` to "HIT".
- In this case, also set `X-Cache-Hits` to the value of `obj.hits`.

## Solution

You can find an example solution in `vcl/cache_result.vcl`.
