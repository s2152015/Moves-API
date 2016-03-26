<?php
/****************** EXAMPLE ***************************
$file = $this->data['Adv']['imageurl'];
$destination = WWW_ROOT . $this->uploadsDir . DS ;
//$asfasfas=$this->Upload->upload($file, $destination, null, array('type' => 'resizecrop', 'size' => array('200', '100'), 'output' => 'jpg'));
$asfasfas=$this->Upload->upload($file, $destination, null,null);
$this->data['Adv']['imageurl'] = '/' . $this->uploadsDir . '/' . $this->Upload->result;
$success = $this->Upload->resizeImage('resize', $this->Upload->result, $destination, "thumbFilename_".$this->Upload->result, 80, FALSE, 90);                 
 */




/***************************eXAMPLE uPLOAD fILE ***************************************
 *  $asfasfas=$this->Upload->upload_file($file, $destination, null,null);
//                    //$this->data['Adv']['imageurl'] = '/' . $this->uploadsDir . '/' . "thumbFilename_".$this->Upload->result;
//                    $this->data['Adv']['imageurl'] = $this->Upload->result;
 */
class UploadComponent extends Object {

    /**
     * 	Private Vars
     */
    var $_file;
    var $_filepath;
    var $_destination;
    var $_name;
    var $_short;
    var $_rules;
    var $_allowed;

    /**
     * 	Public Vars
     */
    var $errors;

    function startup(&$controller) {
        // This method takes a reference to the controller which is loading it.
        // Perform controller initialization here.
    }

    /**
     * upload
     * - handle uploads of any type
     * 		@ file - a file (file to upload) $_FILES[FILE_NAME]
     * 		@ path - string (where to upload to)
     * 		@ name [optional] - override saved filename
     * 		@ rules [optional] - how to handle file types
     * 			- rules['type'] = string ('resize','resizemin','resizecrop','crop')
     * 			- rules['size'] = array (x, y) or single number
     * 			- rules['output'] = string ('gif','png','jpg')
     * 			- rules['quality'] = integer (quality of output image)
     * 		@ allowed [optional] - allowed filetypes
     * 			- defaults to 'jpg','jpeg','gif','png'
     * 	ex:
     * 	$upload = new upload($_FILES['MyFile'], 'uploads');
     *
     */
    function upload($file, $destination, $name = NULL, $rules = NULL, $allowed = NULL) {

        $this->result = false;
        $this->error = false;

        // -- save parameters
        $this->_file = $file;
        $this->_destination = $destination;
        if (!is_null($rules))
            $this->_rules = $rules;

        if (!is_null($allowed)) {
            $this->_allowed = $allowed;
        } else {
            $this->_allowed = array('jpg', 'jpeg', 'gif', 'png');
        }

        // -- hack dir if / not provided
        if (substr($this->_destination, -1) != '/') {
            $this->_destination .= '/';
        }

        // -- check that FILE array is even set
        if (isset($file) && is_array($file) && !$this->upload_error($file['error'])) {

            // -- cool, now set some variables
            $fileName = ($name == NULL) ? $this->uniquename($destination . $file['name']) : $destination . $name;
            $fileTmp = $file['tmp_name'];
            $fileSize = $file['size'];
            $fileType = $file['type'];
            $fileError = $file['error'];

            // -- update name
            $this->_name = $fileName;

            // -- error if not correct extension
            if (!in_array($this->ext($fileName), $this->_allowed)) {
                $this->error("File type not allowed.");
            } else {

                // -- it's been uploaded with php
                if (is_uploaded_file($fileTmp)) {

                    // -- how are we handling this file
                    if ($rules == NULL) {
                        // -- where to put the file?
                        $output = $fileName;
                        // -- just upload it
                        if (move_uploaded_file($fileTmp, $output)) {
                            chmod($output, 0644);
                            $this->result = basename($this->_name);
                        } else {
                            $this->error("Could not move '$fileName' to '$destination'");
                        }
                    } else {
                        // -- gd lib check
                        if (function_exists("imagecreatefromjpeg")) {
                            if (!isset($rules['output']))
                                $rules['output'] = NULL;
                            if (!isset($rules['quality']))
                                $rules['quality'] = NULL;
                            // -- handle it based on rules
                            if (isset($rules['type']) && isset($rules['size'])) {
                                $this->image($this->_file, $rules['type'], $rules['size'], $rules['output'], $rules['quality']);
                            } else {
                                $this->error("Invalid \"rules\" parameter");
                            }
                        } else {
                            $this->error("GD library is not installed");
                        }
                    }
                } else {
                    $this->error("Possible file upload attack on '$fileName'");
                }
            }
        } else {
            $this->error("Possible file upload attack");
        }
    }
    
    
    
    
function upload_file($file, $destination, $name = NULL, $rules = NULL, $allowed = NULL) {

        $this->result = false;
        $this->error = false;

        // -- save parameters
        $this->_file = $file;
        $this->_destination = $destination;
        if (!is_null($rules))
            $this->_rules = $rules;

        if (!is_null($allowed)) {
            $this->_allowed = $allowed;
        } else {
            $this->_allowed = array('doc', 'pdf', 'docx', 'xsl','xslx','txt');
        }

        // -- hack dir if / not provided
        if (substr($this->_destination, -1) != '/') {
            $this->_destination .= '/';
        }

        // -- check that FILE array is even set
        if (isset($file) && is_array($file) && !$this->upload_error($file['error'])) {

            // -- cool, now set some variables
            $fileName = ($name == NULL) ? $this->uniquename($destination . $file['name']) : $destination . $name;
            $fileTmp = $file['tmp_name'];
            $fileSize = $file['size'];
            $fileType = $file['type'];
            $fileError = $file['error'];

            // -- update name
            $this->_name = $fileName;

            // -- error if not correct extension
            if (!in_array($this->ext($fileName), $this->_allowed)) {
                $this->error("File type not allowed.");
            } else {

                // -- it's been uploaded with php
                if (is_uploaded_file($fileTmp)) {

                    // -- how are we handling this file
                    if ($rules == NULL) {
                        // -- where to put the file?
                        $output = $fileName;
                        // -- just upload it
                        if (move_uploaded_file($fileTmp, $output)) {
                            chmod($output, 0644);
                            $this->result = basename($this->_name);
                        } else {
                            $this->error("Could not move '$fileName' to '$destination'");
                        }
                    } else {
                        // -- gd lib check
                        if (function_exists("imagecreatefromjpeg")) {
                            if (!isset($rules['output']))
                                $rules['output'] = NULL;
                            if (!isset($rules['quality']))
                                $rules['quality'] = NULL;
                            // -- handle it based on rules
                            if (isset($rules['type']) && isset($rules['size'])) {
                                $this->image($this->_file, $rules['type'], $rules['size'], $rules['output'], $rules['quality']);
                            } else {
                                $this->error("Invalid \"rules\" parameter");
                            }
                        } else {
                            $this->error("GD library is not installed");
                        }
                    }
                } else {
                    $this->error("Possible file upload attack on '$fileName'");
                }
            }
        } else {
            $this->error("Possible file upload attack");
        }
    }
    // -- return the extension of a file	
    function ext($file) {
        $ext = trim(substr($file, strrpos($file, ".") + 1, strlen($file)));
        return $ext;
    }

    // -- add a message to stack (for outside checking)
    function error($message) {
        if (!is_array($this->errors))
            $this->errors = array();
        array_push($this->errors, $message);
    }

    function image($file, $type, $size, $output = NULL, $quality = NULL) {

        if (is_null($type))
            $type = 'resize';
        if (is_null($size))
            $size = 100;
        if (is_null($output))
            $output = 'jpg';
        if (is_null($quality))
            $quality = 75;

        // -- format variables
        $type = strtolower($type);
        $output = strtolower($output);
        if (is_array($size)) {
            $maxW = intval($size[0]);
            $maxH = intval($size[1]);
        } else {
            $maxScale = intval($size);
        }

        // -- check sizes
        if (isset($maxScale)) {
            if (!$maxScale) {
                $this->error("Max scale must be set");
            }
        } else {
            if (!$maxW || !$maxH) {
                $this->error("Size width and height must be set");
                return;
            }
            if ($type == 'resize') {
                $this->error("Provide only one number for size");
            }
        }

        // -- check output
        if ($output != 'jpg' && $output != 'png' && $output != 'gif') {
            $this->error("Cannot output file as " . strtoupper($output));
        }

        if (is_numeric($quality)) {
            $quality = intval($quality);
            if ($quality > 100 || $quality < 1) {
                $quality = 75;
            }
        } else {
            $quality = 75;
        }

        // -- get some information about the file
        $uploadSize = getimagesize($file['tmp_name']);
        $uploadWidth = $uploadSize[0];
        $uploadHeight = $uploadSize[1];
        $uploadType = $uploadSize[2];

        if ($uploadType != 1 && $uploadType != 2 && $uploadType != 3) {
            $this->error("File type must be GIF, PNG, or JPG to resize");
        }

        switch ($uploadType) {
            case 1: $srcImg = imagecreatefromgif($file['tmp_name']);
                break;
            case 2: $srcImg = imagecreatefromjpeg($file['tmp_name']);
                break;
            case 3: $srcImg = imagecreatefrompng($file['tmp_name']);
                break;
            default: $this->error("File type must be GIF, PNG, or JPG to resize");
        }

        switch ($type) {

            case 'resize':
                # Maintains the aspect ration of the image and makes sure that it fits
                # within the maxW and maxH (thus some side will be smaller)
                // -- determine new size
                if ($uploadWidth > $maxScale || $uploadHeight > $maxScale) {
                    if ($uploadWidth > $uploadHeight) {
                        $newX = $maxScale;
                        $newY = ($uploadHeight * $newX) / $uploadWidth;
                    } else if ($uploadWidth < $uploadHeight) {
                        $newY = $maxScale;
                        $newX = ($newY * $uploadWidth) / $uploadHeight;
                    } else if ($uploadWidth == $uploadHeight) {
                        $newX = $newY = $maxScale;
                    }
                } else {
                    $newX = $uploadWidth;
                    $newY = $uploadHeight;
                }

                $dstImg = imagecreatetruecolor($newX, $newY);
                imagecopyresampled($dstImg, $srcImg, 0, 0, 0, 0, $newX, $newY, $uploadWidth, $uploadHeight);

                break;

            case 'resizemin':
                # Maintains aspect ratio but resizes the image so that once
                # one side meets its maxW or maxH condition, it stays at that size
                # (thus one side will be larger)
                #get ratios
                $ratioX = $maxW / $uploadWidth;
                $ratioY = $maxH / $uploadHeight;

                #figure out new dimensions
                if (($uploadWidth == $maxW) && ($uploadHeight == $maxH)) {
                    $newX = $uploadWidth;
                    $newY = $uploadHeight;
                } else if (($ratioX * $uploadHeight) > $maxH) {
                    $newX = $maxW;
                    $newY = ceil($ratioX * $uploadHeight);
                } else {
                    $newX = ceil($ratioY * $uploadWidth);
                    $newY = $maxH;
                }

                $dstImg = imagecreatetruecolor($newX, $newY);
                imagecopyresampled($dstImg, $srcImg, 0, 0, 0, 0, $newX, $newY, $uploadWidth, $uploadHeight);

                break;

            case 'resizecrop':
                // -- resize to max, then crop to center
                $ratioX = $maxW / $uploadWidth;
                $ratioY = $maxH / $uploadHeight;

                if ($ratioX < $ratioY) {
                    $newX = round(($uploadWidth - ($maxW / $ratioY)) / 2);
                    $newY = 0;
                    $uploadWidth = round($maxW / $ratioY);
                    $uploadHeight = $uploadHeight;
                } else {
                    $newX = 0;
                    $newY = round(($uploadHeight - ($maxH / $ratioX)) / 2);
                    $uploadWidth = $uploadWidth;
                    $uploadHeight = round($maxH / $ratioX);
                }

                $dstImg = imagecreatetruecolor($maxW, $maxH);
                imagecopyresampled($dstImg, $srcImg, 0, 0, $newX, $newY, $maxW, $maxH, $uploadWidth, $uploadHeight);

                break;

            case 'crop':
                // -- a straight centered crop
                $startY = ($uploadHeight - $maxH) / 2;
                $startX = ($uploadWidth - $maxW) / 2;

                $dstImg = imageCreateTrueColor($maxW, $maxH);
                ImageCopyResampled($dstImg, $srcImg, 0, 0, $startX, $startY, $maxW, $maxH, $maxW, $maxH);

                break;

            default: $this->error("Resize function \"$type\" does not exist");
        }

        // -- try to write
        switch ($output) {
            case 'jpg':
                $write = imagejpeg($dstImg, $this->_name, $quality);
                break;
            case 'png':
                $write = imagepng($dstImg, $this->_name . ".png", $quality);
                break;
            case 'gif':
                $write = imagegif($dstImg, $this->_name . ".gif", $quality);
                break;
        }

        // -- clean up
        imagedestroy($dstImg);

        if ($write) {
            $this->result = basename($this->_name);
        } else {
            $this->error("Could not write " . $this->_name . " to " . $this->_destination);
        }
    }

    function newname($file) {
        return time() . "." . $this->ext($file);
    }

    function uniquename($file) {
        $parts = pathinfo($file);
        $dir = $parts['dirname'];
        $file = ereg_replace('[^[:alnum:]_.-]', '', $parts['basename']);
        $ext = $parts['extension'];
        if ($ext) {
            $ext = '.' . $ext;
            $file = substr($file, 0, -strlen($ext));
        }
        $i = 0;
        while (file_exists($dir . '/' . $file . $i . $ext))
            $i++;
        return $dir . '/' . $file . $i . $ext;
    }

    function upload_error($errorobj) {
        $error = false;
        switch ($errorobj) {
            case UPLOAD_ERR_OK: break;
            case UPLOAD_ERR_INI_SIZE: $error = "The uploaded file exceeds the upload_max_filesize directive (" . ini_get("upload_max_filesize") . ") in php.ini.";
                break;
            case UPLOAD_ERR_FORM_SIZE: $error = "The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form.";
                break;
            case UPLOAD_ERR_PARTIAL: $error = "The uploaded file was only partially uploaded.";
                break;
            case UPLOAD_ERR_NO_FILE: $error = "No file was uploaded.";
                break;
            case UPLOAD_ERR_NO_TMP_DIR: $error = "Missing a temporary folder.";
                break;
            case UPLOAD_ERR_CANT_WRITE: $error = "Failed to write file to disk";
                break;
            default: $error = "Unknown File Error";
        }
        return ($error);
    }

     function resizeImage($cType = 'resize', $id='', $imgFolder='', $newName = false, $newWidth=false, $newHeight=false, $quality = 75, $bgcolor = false) {
        $img = $imgFolder . $id;
        list($oldWidth, $oldHeight, $type) = getimagesize($img);
        $ext = $this->_image_type_to_extension($type);

        //check to make sure that the file is writeable, if so, create destination image (temp image)
        if (is_writeable($imgFolder)) {
            if ($newName) {
                $dest = $imgFolder . $newName;
            } else {
                $dest = $imgFolder . 'tmp_' . $id;
            }
        } else {
            //if not let developer know
            $imgFolder = substr($imgFolder, 0, strlen($imgFolder) - 1);
            $imgFolder = substr($imgFolder, strrpos($imgFolder, '\\') + 1, 20);
            debug("You must allow proper permissions for image processing. And the folder has to be writable.");
            debug("Run \"chmod 777 on '$imgFolder' folder\"");
            exit();
        }

        //check to make sure that something is requested, otherwise there is nothing to resize.
        //although, could create option for quality only
        if ($newWidth OR $newHeight) {
            /*
             * check to make sure temp file doesn't exist from a mistake or system hang up.
             * If so delete.
             */
            if (file_exists($dest)) {
                unlink($dest);
            } else {
                switch ($cType) {
                    default:
                    case 'resize':
                        # Maintains the aspect ration of the image and makes sure that it fits
                        # within the maxW(newWidth) and maxH(newHeight) (thus some side will be smaller)
                        $widthScale = 2;
                        $heightScale = 2;

                        if ($newWidth)
                            $widthScale = $newWidth / $oldWidth;
                        if ($newHeight)
                            $heightScale = $newHeight / $oldHeight;
                        //debug("W: $widthScale  H: $heightScale<br>");
                        if ($widthScale < $heightScale) {
                            $maxWidth = $newWidth;
                            $maxHeight = false;
                        } elseif ($widthScale > $heightScale) {
                            $maxHeight = $newHeight;
                            $maxWidth = false;
                        } else {
                            $maxHeight = $newHeight;
                            $maxWidth = $newWidth;
                        }

                        if ($maxWidth > $maxHeight) {
                            $applyWidth = $maxWidth;
                            $applyHeight = ($oldHeight * $applyWidth) / $oldWidth;
                        } elseif ($maxHeight > $maxWidth) {
                            $applyHeight = $maxHeight;
                            $applyWidth = ($applyHeight * $oldWidth) / $oldHeight;
                        } else {
                            $applyWidth = $maxWidth;
                            $applyHeight = $maxHeight;
                        }
                        //debug("mW: $maxWidth mH: $maxHeight<br>");
                        //debug("aW: $applyWidth aH: $applyHeight<br>");
                        $startX = 0;
                        $startY = 0;
                        //exit();
                        break;
                    case 'resizeCrop':
                        // -- resize to max, then crop to center
                        $ratioX = $newWidth / $oldWidth;
                        $ratioY = $newHeight / $oldHeight;

                        if ($ratioX < $ratioY) {
                            $startX = round(($oldWidth - ($newWidth / $ratioY)) / 2);
                            $startY = 0;
                            $oldWidth = round($newWidth / $ratioY);
                            $oldHeight = $oldHeight;
                        } else {
                            $startX = 0;
                            $startY = round(($oldHeight - ($newHeight / $ratioX)) / 2);
                            $oldWidth = $oldWidth;
                            $oldHeight = round($newHeight / $ratioX);
                        }
                        $applyWidth = $newWidth;
                        $applyHeight = $newHeight;
                        break;
                    case 'crop':
                        // -- a straight centered crop
                        $startY = ($oldHeight - $newHeight) / 2;
                        $startX = ($oldWidth - $newWidth) / 2;
                        $oldHeight = $newHeight;
                        $applyHeight = $newHeight;
                        $oldWidth = $newWidth;
                        $applyWidth = $newWidth;
                        break;
                }

                switch ($ext) {
                    case 'gif' :
                        $oldImage = imagecreatefromgif($img);
                        break;
                    case 'png' :
                        $oldImage = imagecreatefrompng($img);
                        break;
                    case 'jpg' :
                    case 'jpeg' :
                        $oldImage = imagecreatefromjpeg($img);
                        break;
                    default :
                        //image type is not a possible option
                        return false;
                        break;
                }

                //create new image
                $newImage = imagecreatetruecolor($applyWidth, $applyHeight);

                if ($bgcolor):
                    //set up background color for new image
                    sscanf($bgcolor, "%2x%2x%2x", $red, $green, $blue);
                    $newColor = ImageColorAllocate($newImage, $red, $green, $blue);
                    imagefill($newImage, 0, 0, $newColor);
                endif;

                //put old image on top of new image
                imagecopyresampled($newImage, $oldImage, 0, 0, $startX, $startY, $applyWidth, $applyHeight, $oldWidth, $oldHeight);

                switch ($ext) {
                    case 'gif' :
                        imagegif($newImage, $dest, $quality);
                        break;
                    case 'png' :
                        imagepng($newImage, $dest, $quality);
                        break;
                    case 'jpg' :
                    case 'jpeg' :
                        imagejpeg($newImage, $dest, $quality);
                        break;
                    default :
                        return false;
                        break;
                }

                imagedestroy($newImage);
                imagedestroy($oldImage);

                if (!$newName) {
                    unlink($img);
                    rename($dest, $img);
                }

                return true;
            }
        } else {
            return false;
        }
    }

    /**
     * Image type to extension
     * 
     * @param string $imagetype file extension
     * @access private
     * @return string
     */
    private function _image_type_to_extension($imagetype) {
        if (empty($imagetype))
            return false;

        switch ($imagetype) {
            case IMAGETYPE_GIF : return 'gif';
            case IMAGETYPE_JPEG : return 'jpg';
            case IMAGETYPE_PNG : return 'png';
            case IMAGETYPE_SWF : return 'swf';
            case IMAGETYPE_PSD : return 'psd';
            case IMAGETYPE_BMP : return 'bmp';
            case IMAGETYPE_TIFF_II : return 'tiff';
            case IMAGETYPE_TIFF_MM : return 'tiff';
            case IMAGETYPE_JPC : return 'jpc';
            case IMAGETYPE_JP2 : return 'jp2';
            case IMAGETYPE_JPX : return 'jpf';
            case IMAGETYPE_JB2 : return 'jb2';
            case IMAGETYPE_SWC : return 'swc';
            case IMAGETYPE_IFF : return 'aiff';
            case IMAGETYPE_WBMP : return 'wbmp';
            case IMAGETYPE_XBM : return 'xbm';
            default : return false;
        }
    }

}

?>