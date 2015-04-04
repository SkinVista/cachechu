## Introduction ##
> Cachechu is a simple GWebCache written in PHP that supports multiple networks.

## File List ##
  * **index.php**                - Cachechu PHP code
  * **main.php**                 - Web interface
  * **main.css**                 - main stylesheet
  * **data/gnutella2/urls.dat.sample** - default list of URLs for Gnutella2 (remove .sample to use)
  * **data/gnutella/urls.dat.sample**  - default list of URLs for Gnutella (remove .sample to use)
  * **data/foxy/urls.dat.sample**      - default list of URLs for Foxy (remove .sample to use)
  * **readme.txt**               - setup information

## Requirements ##
  1. The following paths require write (and read) access:
    * data/`<`network>/bans.dat
    * data/`<`network>/hosts.dat
    * data/`<`network>/urls.dat
    * data/update.dat (if update notification enabled)
> > Replace `<`network> by the networks you support.
  1. The following paths MAY require write (and read) access, depending on configuration:
    * data/bans.dat
    * data/hosts.dat
    * data/urls.dat
  1. The following file should be set as the directory index:
    * index.php
  1. To enable stat logging, the following files should exist:
    * data/stats.dat
    * data/start.dat
  1. If your host cannot test clients on a port other than 80, the following configuration should **not** be present:
```
[Host]
Verify = 1
```

## Web interface ##
  1. To disable the Web interface, the following configuration should be present:
```
[Interface]
Show = 0
```
  1. To disable info pages on the Web interface, the following configuration should be present:
```
[Interface]
Info = 0
```
  1. Hosts shows the country (if GeoIP present), IP, port, client, timestamp, and age of hosts for each network.
  1. Services shows the country (if GeoIP present), URL, IP, client, timestamp of caches for each network.

## Compatibility ##

> Cachechu has been tested under PHP 5.3.0.

## Notes ##
> Stats support was removed from Cachechu 1.2.