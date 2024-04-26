const fs = require('fs');
const path = require('path');

// Function to rename file extension
function renameFileExtension(filePath, newExtension) {
    const directory = path.dirname(filePath);
    const fileName = path.basename(filePath, path.extname(filePath));
    const newFileName = `${fileName}.${newExtension}`;
    const newFilePath = path.join(directory, newFileName);

    fs.renameSync(filePath, newFilePath);
    console.log(`Renamed ${filePath} to ${newFilePath}`);
}

// Function to convert file extensions in a folder
function convertFileExtensions(folderPath, oldExtension, newExtension) {
    fs.readdir(folderPath, (err, files) => {
        if (err) {
            console.error('Error reading folder:', err);
            return;
        }

        files.forEach(file => {
            const filePath = path.join(folderPath, file);
            if (fs.statSync(filePath).isFile() && path.extname(filePath) === `.${oldExtension}`) {
                renameFileExtension(filePath, newExtension);
            }
        });
    });
}

// Usage: Provide folder path, old extension, and new extension
const folderPath = './';
const oldExtension = 'html';
const newExtension = 'php';

convertFileExtensions(folderPath, oldExtension, newExtension);
