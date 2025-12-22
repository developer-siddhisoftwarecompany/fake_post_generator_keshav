# Use official PHP image
FROM php:8.2-cli

# Set working directory
WORKDIR /app

# Copy all project files
COPY . .

# Create uploads folder (safety)
RUN mkdir -p uploads && chmod -R 777 uploads

# Expose port Render uses
EXPOSE 10000

# Start PHP built-in server
CMD ["php", "-S", "0.0.0.0:10000", "index.php"]

