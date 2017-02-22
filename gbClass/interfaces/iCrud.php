<?php
interface iCrud {
    public function load($fields="*",$add="");
    public function insert($fields,$params=null);
    public function update($fields,$params=null,$where=null);
    public function delete($where=null,$params=null);
    public function loadCol($fields = "*", $add = "");
}
