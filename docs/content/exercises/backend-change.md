---
title: backend-change
---

1. Copy `vcl/default.vcl` and reload.
2. Modify the VCL to use `web2` as the backend instead of `web1` when `/web2.html` is requested.
3. Check the log output when you access [web2.html](http://localhost:8080/web2.html) and [index.html](http://localhost:8080/index.html).
