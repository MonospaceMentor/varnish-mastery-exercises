vcl 4.1;

backend default {
	.host = "web1";
	.port = "80";
}

sub vcl_recv {
  # Allow client to force-reload
  if (req.http.Cache-control ~ "no-cache") {
    return(pass);
  }
}
