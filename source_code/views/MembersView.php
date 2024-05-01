<?php
include_once ("models/Template.php");

class MembersView {
    public function render($data){
        $no = 1;
        $dataMembers = null;
        $dataSubs = null;
        
        foreach($data['members'] as $mem){
            list($id, $name, $email, $phone, $join_date, $sub_type, $status) = $mem;
            $statusText = ($status == 1) ? 'Paid' : 'Unpaid';
            $dataMembers .= "<tr>
                                <td>" . $no++ . "</td>
                                <td>" . $name . "</td>
                                <td>" . $email . "</td>
                                <td>" . $phone . "</td>
                                <td>" . $join_date . "</td>
                                <td>" . $sub_type . "</td>
                                <td>" . $statusText . "</td>";

            if($status == 1){
                $dataMembers .= "
                                <td>
                                <a href='index.php?id_hapus=" . $id . "' class='btn btn-danger' '>Delete</a>
                                </td>";
            }else{
                $dataMembers .= "
                                <td>
                                <a href='index.php?id_edit=" . $id .  "' class='btn btn-warning' '>Pay</a>
                                <a href='index.php?id_hapus=" . $id . "' class='btn btn-danger' '>Delete</a>
                                </td>";
            }
            $dataMembers .= "</tr>";

        }
        foreach($data['subs'] as $sub){
            list($id_sub, $type_sub, $duration, $harga) = $sub;
            $dataSubs .= "<option value='" . $id_sub . "'>" . $type_sub . "</option>";
        }
        $template = new Template("templates/index.html");
        $template->replace("TITLE", "Members");
        $template->replace("DATA_TABEL", $dataMembers);
        $template->replace("SUBSCRIPTIONS", $dataSubs);
        $template->write();
    }
}