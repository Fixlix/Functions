<?php
/**
 * ������� ���������� ���������� ���� � �������
 *
 * @param type $array_words ������ ����
 * @param type $min_word_lenght ����������� ������ ���� ������� ������ ��������������
 * @return int ������ ���������� ���������� ���� (array( ["�����"]=> int(���������� ����������)))
 */
function count_words($array_words, $min_word_lenght = 3) {
    $tmp_arr = array();
    foreach ($array_words as $val) {
        if (strlen($val)>=$min_word_lenght) {
            $val = mb_strtolower($val);
            if (array_key_exists($val, $tmp_arr)) {
                $tmp_arr[$val]++;
            } else {
                $tmp_arr[$val] = 1;
            }
        }
    }
    arsort($tmp_arr);
    return $tmp_arr;
}