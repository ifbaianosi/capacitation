						// inclusão para meses em extenso
                        <?= 
							$month = ($e->birth[5].$e->birth[6]);
							switch($month){
								case $month == 1: $strMonth = "janeiro"; break;
								case $month == 2: $strMonth = "fevereiro"; break;
								case $month == 3: $strMonth = "março"; break;
								case $month == 4: $strMonth = "abril"; break;
								case $month == 5: $strMonth = "maio"; break;
								case $month == 6: $strMonth = "junho"; break;
								case $month == 7: $strMonth = "julho"; break;
								case $month == 8: $strMonth = "agosto"; break;
								case $month == 9: $strMonth = "setembro"; break;
								case $month == 10: $strMonth = "outubro"; break;
								case $month == 11: $strMonth = "novembro"; break;
								case $month == 12: $strMonth = "dezembro"; break;
								default: " ";
							}
						?>