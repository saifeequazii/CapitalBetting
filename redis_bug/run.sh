while true
do
sleep 3

if redis-cli -h ssh.capitalbeting.com set foo bar |grep read
then
docker-compose up
docker-compose down -d 
sleep 1
else
docker-compose up
fi

done