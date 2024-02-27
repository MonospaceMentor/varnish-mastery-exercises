---
title: Varnish Master Exercises
type: page
---

## Welcome to the course!

## Usage guide

### VCL templates

The `vcl` directory contains pre-built VCL files.

In order to use on of these files, copy it to the repository root where Varnish will read it. The file name has to be `default.vcl`:

Then execute the `reload` script to force Varnish to reload its VCL. Varnish will output a confirmation.

```bash
$ cp vcl/special.vcl default.vcl
$ reload
VCL 'reload_20240221_120328_230' compiled
VCL 'reload_20240221_120328_230' now active

```

## Exercise directory

- [max-age](exercises/max-age)
- [backend-change](exercises/backend-change)
- [querysort](exercises/querysort)
