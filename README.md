# Steal The Steel CTF

*Created by Dr. Vitaly Ford, Amela Gjishti, Konstantin Menako, and Daniel Tyler for the Women In CyberSecurity (WiCyS) 2019 conference.*

More documentation in the works, please check back.

## Requirements

```
docker docker-compose git
```

## Deployment

This project is fairly easy to deploy, simply run [`build.sh`](/build.sh) which will

1. Clone [CTFd](https://github.com/CTFd/CTFd) into the directory `ctfd/`
2. Generate a required crypto key for CTFd.
3. Run `docker-compose up` which will build and start the CTFd instance and all 18 challenges.

Once CTFd has started, you may navigate to `localhost:80` in order to configure the challenges. Currently all challenges need to be setup manually within CTFd but there are plans to copy the data present during the WiCyS competition into this repo.
