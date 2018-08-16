# WordPress via docker-compose

The goal of this project is to create a highly secure WordPress stack that can be brought up with the least amount of effort. This is not intended to support shared hosting. Use at your own risk.

If you find that something flat out doesn't work or a weakness/problem in configuration - please let me know. I appreciate the feedback.

## Getting Started

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes. 
See deployment for notes on how to deploy the project on a live system.

These instructions are not yet done. Sorry!

### Prerequisites

Ubunutu and a strong cup of coffee

### Installing

I recommend Ubuntu, you'll need to adjust if using another Linux flavor. Change to a directory that you intend to run the website from.

```
mkdir wordpresstest
cd wordpresstest
```

Install docker

```
apt-get install docker.io
```

Install git

```
apt-get install git
```

Pull down a clone of the project

```
git clone https://github.com/dafcarte/docker-compose-wordpress
```

Spin up the website stack

```
docker-compose up -d
```

## Built With

* [NGINX](http://www.dropwizard.io/1.0.2/docs/) - Webserver
* [WordPress](https://maven.apache.org/) - CMS
* [PHP7](https://rometools.github.io/rome/) - Used for Processing PHP
* [MariaDB](https://rometools.github.io/rome/) - Database in Use

## Contributing

Not taking contributions this time....

## Versioning

We do versioning but not yet!

## Authors

* **Dave Carter** - *Initial work*

## License

This project is licensed under the MIT License - see the [LICENSE.md](LICENSE.md) file for details

## Acknowledgments

* My friends
* Beer
* My friends who give me beer
