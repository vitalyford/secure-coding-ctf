## To deploy challenges to the swarm use:
1. run `docker swarm init --advertise-addr [ip]`
2. run `docker stack deploy -c docker-compose.yml challenges`
3. run `docker-compose up -d`
## To upload challenges to ctfd
1. get token from  [ctfd_url]/settings#tokens
2. set token and ctfd_url as an enviromental variables CTFD_TOKEN and CTFD_URL
`export CTFD_TOKEN=41f91420ce553ddf84c2857e9253d098240bf4a317c5619f9e7e1bfdb7ed5efc`
`export CTFD_URL=http://10.70.4.47/`
3. run `bash ctfd-init`
4. run `python3 ctfd.py`