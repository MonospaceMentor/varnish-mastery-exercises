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

sub vcl_deliver {
	if (obj.hits > 0) {
		set resp.http.X-Cache = "HIT";
		set resp.http.X-Cache-Hits = obj.hits;
	} else {
		set resp.http.X-Cache = "MISS";
	}
}
