# Base image :
FROM fpfis/php56-build

# Create a folder for my app in the container
RUN mkdir /app
RUN mkdir /app/build

# Make the image work in this directory by default
WORKDIR /app/build

# Push my local files to the image
ADD . /app/build

# Run composer install to get my app ready
RUN composer install

# Specify which command to run when my container starts
ENTRYPOINT [ "php", "/app/build/index.php" ]
