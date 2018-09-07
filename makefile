build:
	docker build -t ai281x-docker:latest .
run:
	docker run -d -p 5000:5000 ai281x-docker
dev:
	docker build -t ai281x-docker:latest .
	docker run -v `pwd`/web:/app -p 5000:5000 ai281x-docker
	open "http://localhost:5000"
rm:
	docker rm $(docker ps -a -q)
	docker rmi $(docker images -q)
