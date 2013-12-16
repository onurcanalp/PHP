<?php
######----ONUR CANALP----####
##         NAMESPACES      ##
##         25.07.2013      ##
#############################

// "Personel" isminde bir namespace tanımlıyorum.
namespace Personel;

// "Personel" namespace'i içinde "Temizlik" sınıfı oluşturuyorum.
Class Temizlik
{
    // "Temizlik" sınıfı içinde "oku" isminde bir fonksiyon oluşturuyorum.
    public function oku()
    {
        return 'Personel namespace içindeki Temizlik çalışanları';
    }
}

Class Teknik
{
    // "Teknik" sınıfı içinde "oku" isminde bir fonksiyon oluşturuyorum.
    public function oku()
    {
        return 'Personel namespace içindeki Teknik çalışanlar';
    }
}

// "Yoneticiler" isminde bir namespace tanımlıyorum.
namespace Yoneticiler;

// "Yoneticiler" namespace'i içinde "Temizlik" sınıfı oluşturuyorum.
Class Temizlik
{
    // "Temizlik" sınıfı içinde "oku" isminde bir fonksiyon oluşturuyorum.
    public function oku()
    {
        return 'Yöneticiler namespace içindeki Temizlik çalışanlar';
    }
}

Class Teknik
{
    // "Teknik" sınıfı içinde "oku" isminde bir fonksiyon oluşturuyorum.
    public function oku()
    {
        return 'Yöneticiler namespace içindeki teknik çalışanlar';
    }
}

// "Personel" namespace'i içinde bulunan "Temizlik" Sınıfını tanımlıyorum.
$temizlik1 = new \Personel\Temizlik;
// "Temizlik" namespace'i içinde bulunan "Temizlik" Sınıfını tanımlıyorum.
$temizlik2 = new \Yoneticiler\Temizlik;

// "Personel" namespace'i içinde bulunan "Teknik" Sınıfını tanımlıyorum.
$teknik1 = new \Personel\Teknik;
// "Temizlik" namespace'i içinde bulunan "Teknik" Sınıfını tanımlıyorum.
$teknik2 = new \Yoneticiler\Teknik;

// Sınıfların içinde bulunan fonksiyonları çağırıyoruz ve sonucu ekrana basıyoruz.
echo '<p>' . $temizlik1->oku() . '</p>';
echo '<p>' . $temizlik2->oku() . '</p>';
echo '<p>' . $teknik1->oku() . '</p>';
echo '<p>' . $teknik2->oku() . '</p>';

?>
