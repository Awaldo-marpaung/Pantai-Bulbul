FROM nginx
RUN mkdir -p /var/www/web1
COPY . /var/www/web1/
COPY nginx.conf /etc/nginx/nginx.conf
EXPOSE 81
CMD ["nginx", "-g", "daemon off;"]