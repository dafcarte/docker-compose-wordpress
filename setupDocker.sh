#!/bash

#this is for Amazon AWS Linux AMI

yum clean all
sudo yum update
sudo yum install -y docker
sudo usermod -a -G docker ec2-user1

systemctl start docker.service
systemctl enable docker.service

yum install epel-release
yum install -y python-pip

pip install docker-compose


