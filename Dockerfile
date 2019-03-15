FROM httpd:2.4

WORKDIR "/usr/local/apache2/htdocs/"

COPY ./ChallengeMain/index.html /usr/local/apache2/htdocs/

COPY ./Challenge11/challenge11.py /usr/local/apache2/htdocs/
COPY ./Challenge12/challenge12.py /usr/local/apache2/htdocs/
COPY ./Challenge13/Challenge13.java /usr/local/apache2/htdocs/
COPY ./Challenge14/Challenge14.java /usr/local/apache2/htdocs/
COPY ./Challenge15/Challenge15.java /usr/local/apache2/htdocs/
COPY ./Challenge16/Challenge16.java /usr/local/apache2/htdocs/
COPY ./Challenge17/Challenge17.java /usr/local/apache2/htdocs/
COPY ./Challenge18/challenge18.py /usr/local/apache2/htdocs/
COPY ./Challenge19/challenge19.py /usr/local/apache2/htdocs/
COPY ./Challenge20/challenge20.py /usr/local/apache2/htdocs/
