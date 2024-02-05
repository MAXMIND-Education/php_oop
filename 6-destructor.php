<?php

// class className
// {
// 	public function __destruct()
// 	{
// 		//...
// 	}
// }


class File
{
    // Class properties (attributes)
    private $handle;
    private $filename;
    
    // Constructor method
    public function __construct($filename, $mode = 'r')
    {
        // When an object is created, the constructor is called automatically.
        // It initializes the object's properties.
        $this->filename = $filename;
        $this->handle = fopen($filename, $mode);
    }

    // Destructor method
    public function __destruct()
    {
        // The destructor is called automatically when the object is no longer referenced.
        // It's used to perform cleanup operations, in this case, closing the file handle.
        if ($this->handle) {
            fclose($this->handle);
        }
    }

    // Class method to read the file contents
    public function read()
    {
        // It reads the file contents using the file handle and returns the content as a string.
        return fread($this->handle, filesize($this->filename));
    }
}

$f = new File('./test.txt');
echo $f->read();
