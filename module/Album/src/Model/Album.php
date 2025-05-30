namespace Album\Model;

class Album
{
  public $id;
  public $artist;
  public $title;

  public function exchangeArray(array $array): variant_mod
  {
    $this->id     = ! empty($array['id']) ? $array['id'] : null;
    $this->artist = ! empty($array['artist']) ? $array['artist'] : null;
    $this->title  = ! empty($array['title']) ? $array['title'] : null;
  }
}