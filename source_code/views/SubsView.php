<?php
Class SubsView{
    public function render($data){
        $no = 1;
        $dataSubs = null;
        foreach($data['subs'] as $sub){
            list($id, $sub_type, $sub_price, $sub_duration) = $sub;
            $dataSubs .= "<tr>
                            <td>" . $no++ . "</td>
                            <td>" . $sub_type . "</td>
                            <td>" . $sub_price . "</td>
                            <td>" . $sub_duration . "</td>
                            <td>
                            <a href='form_sub.php?id_edit=" . $id .  "' class='btn btn-warning' '>Edit</a>
                            <a href='subs.php?id_hapus=" . $id . "' class='btn btn-danger' '>Hapus</a>
                            </td>
                        </tr>";

                    }
                    $template = new Template("templates/subs.html");
        
                    $template->replace("TITLE", "Subscription");
                    $template->replace("DATA_TABEL", $dataSubs);
                    $template->write();
    }

}