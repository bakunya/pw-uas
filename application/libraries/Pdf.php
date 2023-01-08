<?php defined('BASEPATH') or exit('No direct script access allowed');

use Dompdf\Dompdf;
use Dompdf\Options;

class Pdf extends Dompdf
{
    public $filename;

    public function __construct()
    {
        $options = new Options();
        $options->set('isRemoteEnabled', TRUE);

        parent::__construct($options);
        $this->filename = "rps.pdf";
        $this->setPaper('A4', 'landscape');
    }

    protected function ci()
    {
        return get_instance();
    }

    public function load_view($html)
    {
        $this->loadHtml($html);
        $this->render();
        $this->stream($this->filename, array("Attachment" => false));
    }
}
