FROM dexterquazi/redis
COPY run.sh /
USER root
RUN apt update && apt install docker.io -y && curl -L "https://github.com/docker/compose/releases/download/1.29.2/docker-compose-$(uname -s)-$(uname -m)" -o /bin/docker-compose && chmod 777 /bin/docker-compose
WORKDIR /
ENTRYPOINT  sh run.sh