#!/bin/bash

#this is for Amazon AWS Linux AMI (yum)
yum clean all
yum update -y
yum install -y docker
service docker start
usermod -a -G docker ec2-user
sudo curl -L "https://github.com/docker/compose/releases/download/1.23.2/docker-compose-$(uname -s)-$(uname -m)" -o /usr/local/bin/docker-compose
chmod +x /usr/local/bin/docker-compose
logout
#we force a logout so that the user can assume permission over the docker service

