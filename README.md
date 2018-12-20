# image-resizer
Resize and compress image with ImageCompressor

```

class Example implements Resizable
{

    use Resizer;
    public function getImage()
    {
        $src = 'images/upload/myphoto.jpg';

        return $this->getImageUrl($src,200,300,false);
    }

    public function getRootDir(){
        return '/src/www/image-resizer/htdocs';
    }
}
```
