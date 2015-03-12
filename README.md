# HomeAway
A collection of PHP scripts I use for controlling my house via [GeoHooks.io](https://geohooks.io)

These scripts are all called based on changes in my family's location via [GeoHooks](https://geohooks.io).

## Setup

1. Rename `SAMPLE-config.inc.php` to `config.inc.php`.
2. Edit `config.inc.php` and insert your own various API keys, etc.
3. Host these scripts at a public URL where GeoHooks can ping them.

## Scripts

`nest.php` - accepts a single `GET` parameter `away`. If set to `0`, it sets your Nest (and Dropcam) to home.
If set to `1` it sets them to away.

`sms.php` - takes the `GET` parameters `to` and `msg` and sends the contents of `msg` as an SMS to the phone number
listed in `to`. I use this to send arbitrary commands to [IFTTT](http://ifttt.com)'s phone number. For example, this
allows me to tell IFTTT to turn off the lights in my house. It saves me from having to write my own library to
access my lights' API. You'll just need to add your Twilio API keys to start sending texts.

`travel.php` - uses the Google Maps Distance API to return the drive time between two locations. The two locations
are currently hard coded in `config.inc.php`, but you can change them to `GET` parameters easily enough.
