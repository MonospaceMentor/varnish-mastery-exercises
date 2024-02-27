---
title: backend-change
---

## Background

VCL allows the assignment of different backends to a request:

```c
    backend default {
    ...
    }

    backend special {
    ...
    }

    sub vcl_recv {
        if (req.url ~ "^/special/") {
            set req.backend_hint = special;
        } else {
            set req.backend_hint = default;
        }
    }
```

## Exercise

1. Copy `vcl/default.vcl`.
2. Modify the VCL to use `web2` as the backend instead of `web1` when `/web2.html` is requested.
3. Reload your updated VCL.
4. Check the log output when you access [web2.html](http://localhost:8080/web2.html) and [index.html](http://localhost:8080/index.html).
