while true
do
sleep 3
if redis-cli -h ssh.capitalbeting.com set foo bar |grep read
then
docker-compose up -d
docker-compose down 
sleep 1
else
docker-compose up -d
fi
done