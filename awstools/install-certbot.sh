#!/bin/bash

#inspired from https://medium.com/@gnowland/deploying-lets-encrypt-on-an-amazon-linux-ami-ec2-instance-f8e2e8f4fc1f

yum install python27-devel git
git clone https://github.com/letsencrypt/letsencrypt /opt/letsencrypt
/opt/letsencrypt/letsencrypt-auto --debug
echo "rsa-key-size = 4096" >> /etc/letsencrypt/config.ini
echo "email = dave.carter@gmail.com" >> /etc/letsencrypt/config.ini
/opt/letsencrypt/letsencrypt-auto certonly --debug --webroot -w /morgansmeals.com/html -d morgansmeals.com -d www.morgansmeals.com --config /etc/letsencrypt/config.ini --agree-tos 
rmdir /morgansmeals.com/.well-known

