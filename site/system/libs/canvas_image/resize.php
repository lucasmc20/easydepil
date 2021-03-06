<?php

class resize {

    private $image = null;

    public function __construct($origem) {
        $this->image = new stdClass();
        $this->image->width = null;
        $this->image->height = null;
        $this->image->type = null;
        $this->image->caminho = null;
        if (!empty($origem) && file_exists($origem)) {
            if ($dimensoes = getimagesize($origem)) {
                if (isset($dimensoes[0], $dimensoes[1], $dimensoes[2]) && in_array($dimensoes[2], array(1, 2, 3))) {
                    $this->image->width = $dimensoes[0];
                    $this->image->height = $dimensoes[1];
                    $this->image->type = $dimensoes[2];
                    $this->image->caminho = $this->tirarAcento($origem);
                }
            }
        }
    }

    public function redProporcao($tamanho) {
        if (!empty($tamanho)) {
            if (($this->image->width > $tamanho) || ($this->image->height > $tamanho)) {
                if ($this->image->width >= $this->image->height) {
                    $width = $tamanho;
                    $height = $this->calcRedTamanho($this->image->width, $tamanho, $this->image->height);
                } else {
                    $height = $tamanho;
                    $width = $this->calcRedTamanho($this->image->height, $tamanho, $this->image->width);
                }
                return $this->redimensionar($width, $height);
            } else {
                return true;
            }
        }
        return false;
    }

    private function redimensionar($width, $height) {
        $result = false;
        $novaimagem = imagecreatetruecolor($width, $height);
        switch ($this->image->type) {
            case 1:
                $origem = imagecreatefromgif($this->image->caminho);
                imagecopyresampled($novaimagem, $origem, 0, 0, 0, 0, $width, $height, $this->image->width, $this->image->height);
                imagegif($novaimagem, $this->image->caminho);
                $result = true;
                break;
            case 2:
                $origem = imagecreatefromjpeg($this->image->caminho);
                imagecopyresampled($novaimagem, $origem, 0, 0, 0, 0, $width, $height, $this->image->width, $this->image->height);
                imagejpeg($novaimagem, $this->image->caminho);
                $result = true;
                break;
            case 3:
                $origem = imagecreatefrompng($this->image->caminho);
                imagecopyresampled($novaimagem, $origem, 0, 0, 0, 0, $width, $height, $this->image->width, $this->image->height);
                imagepng($novaimagem, $this->image->caminho);
                $result = true;
                break;
        }
        imagedestroy($novaimagem);
        imagedestroy($origem);
        return $result;
    }

    private function calcRedTamanho($tIni, $tTer, $tCalc) {
        if (!empty($tIni) && !empty($tTer) && !empty($tCalc)) {
            $dTam = (int) $tIni - (int) $tTer;
            $porcento = ($tIni - $dTam) / $tIni;
            $tCalc = ceil($tCalc * $porcento);
        }
        return $tCalc;
    }

    private function tirarAcento($texto) {
        $com_acento = array(' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 'O', ' ', ' ', ' ', '?',);
        $sem_acento = array('a', 'a', 'a', 'a', 'a', 'a', 'c', 'e', 'e', 'e', 'e', 'i', 'i', 'i', 'i', 'n', 'o', 'o', 'o', 'o', 'o', 'u', 'u', 'u', 'y', 'A', 'A', 'A', 'A', 'A', 'A', 'C', 'E', 'E', 'E', 'E', 'I', 'I', 'I', 'I', 'N', 'O', 'O', 'O', 'O', 'O', '0', 'U', 'U', 'U', 'Y',);
        $final = str_replace($com_acento, $sem_acento, $texto);
        $com_pontuacao = array(' ', '`', ' ', '^', '~', ' ', '-');
        $sem_pontuacao = array('', '', '', '', '', '_', '_');
        $final = str_replace($com_pontuacao, $sem_pontuacao, $final);
        return $final;
    }

}
