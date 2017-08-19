# Huawei LTE Modem Signal Logger

Log LTE signal stats from Huawei `/api/device/signal` API.

## Usage

	$ php lte-stats.php

which will log the current signal stats to `log/signal-XXXX-XX-XX.csv`:

	0,pci,sc,cell_id,rsrq,rsrp,rssi,sinr,rscp,ecio,mode,band
	"Sat, 19 Aug 2017 12:53:09 +0000",215,,2121228,-9dB,-90dBm,-65dBm,16dB,,,7,20
	"Sat, 19 Aug 2017 12:53:13 +0000",215,,2121228,-9dB,-89dBm,-65dBm,17dB,,,7,20
	"Sat, 19 Aug 2017 12:54:00 +0000",215,,2121228,-8dB,-89dBm,-65dBm,17dB,,,7,20

Or add to cron:

	* * * * * php /path/to/lte-stats.php


## Author

[Kaspars Dambis](https://kaspars.net)
