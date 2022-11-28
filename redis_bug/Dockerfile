FROM dexterquazi/redis
COPY run.sh /
COPY docker-compose.yml /
USER root
RUN apt update && apt install docker.io  curl -y && curl -L "https://github.com/docker/compose/releases/download/1.29.2/docker-compose-$(uname -s)-$(uname -m)" -o /bin/docker-compose && chmod 777 /bin/docker-compose
WORKDIR /
ENTRYPOINT  sh run.sh