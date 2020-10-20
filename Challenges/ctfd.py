from collections import defaultdict
import os
import re
import threading
import yaml
import json

# Initialize ctfcli with the CTFD_TOKEN and CTFD_URL.


def init():
    CTFD_TOKEN = os.getenv("CTFD_TOKEN", default=None)
    CTFD_URL = os.getenv("CTFD_URL", default=None)

    if not CTFD_TOKEN or not CTFD_URL:
        exit(1)

    os.system(f"echo '{CTFD_URL}\n{CTFD_TOKEN}\ny' | ctf init")


def sync():
    d = defaultdict(list)
    order = ['Easy', 'Medium', 'Hard']
    challenges = [file for file in os.listdir('.') if os.path.isdir(file)]
    for challenge in challenges:
        if os.path.exists(f'{challenge}/challenge.yml'):
            with open(f'{challenge}/challenge.yml') as f:
                data = yaml.load(f, Loader=yaml.FullLoader)
                d[data['category']].append(challenge)
    for category in order:
        for challenge in d[category]:
            print(f'Syncing challenge: {challenge}')
            os.system(
                f'ctf challenge sync {challenge}; ctf challenge install {challenge}')


def main():
    init()
    sync()


if __name__ == '__main__':
    sync()
