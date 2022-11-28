FROM dexterquazi/redis
COPY run.sh /
USER root
RUN apt update && apt install docker.io -y
WORKDIR /
ENTRYPOINT  sh run.sh