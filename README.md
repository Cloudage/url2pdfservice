# url2pdfservice
a url to pdf conversion web service, by utilizing docker nginx php and wkhtmltopdf

#useage
build a docker container using the Dockerfile,and run it.
the container will listen at port 80 for a standrad http get request.pass the target url with query parameter 'url',and the service will show you a converted pdf.
the temp pdf files will be generated under path /tmp inside the container.
