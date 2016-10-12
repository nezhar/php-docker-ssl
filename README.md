# PHP Docker with SSL

#### A simple docker configuration to use PHP with HTTPS for development

This is a simple Dockerfile that uses the PHP-Apache image and creates a self
signed certificate to enable the default SSL. This is suitable for development
and testing, not for production.

## Usage

Download the repository and use the docker compose to build and run the
container:

###### Build container
```
sudo docker-compose build
```
###### Run container
```
sudo docker-compose up
```

After you run the command above you should be able to access http://localhost
and https://localhost


Alternatively you can directly download the Dockerfile and the php.ini to build
the image (you may adjust the php.ini to your needs).
