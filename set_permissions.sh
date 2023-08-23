#!/bin/bash

# Adjust permissions for the public/thumbnail directory
chown -R www-data:www-data public/thumbnail
chmod -R 775 public/thumbnail
