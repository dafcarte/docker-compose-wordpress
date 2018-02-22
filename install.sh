
#this is for Amazon AWS Linux AMI (yum)
sudo yum clean all
sudo yum update
sudo yum install -y docker
gpasswd -a ec2-user docker
systemctl start docker.service
systemctl enable docker.service

sudo yum install epel-release
sudo yum install -y python-pip

pip install docker-compose
git clone https://github.com/dafcarte/docker-compose-wordpress
docker-compose up -d


#this is for Ubunutu (apt)
sudo apt-get update
sudo apt-get upgrade
sudo apt-get install docker
sudo gpasswd -a $USER docker
sudo apt-get install docker-compose
git clone https://github.com/dafcarte/docker-compose-wordpress
docker-compose up -d

