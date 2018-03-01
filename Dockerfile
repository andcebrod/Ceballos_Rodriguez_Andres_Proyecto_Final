FROM iestriana/lamp
RUN apt-get update
RUN apt-get -y install git
RUN cd /var/www/html
RUN git clone https://github.com/andcebrod/Ceballos_Rodriguez_Andres_Proyecto_Final
RUN mv Ceballos_Rodriguez_Andres_Proyecto_Final web
ADD backup.sql /tmp
RUN mysql -u root -pAdmin2015 granPoder</tmp/backup.sql
CMD /usr/bin/startservices.sh
