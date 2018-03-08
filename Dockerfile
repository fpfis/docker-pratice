# Base image :
FROM fpfis/php71

# Create a folder for my app in the container
RUN mkdir /custom71

# Make the image work in this directory by default
WORKDIR /custom71

# Push my local files to the image
ADD . /custom71

# Run composer install to get my app ready
RUN composer install

# Specify which command to run when my container starts
ENTRYPOINT [ "php", "/custom71/index.php" ]

