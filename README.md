• Kas ir API? 
Veids kā serveris sazinas ar klientu

• Kā deklarēt mainīgo PHP valodā? 
$nosaukums = vertiba

• Kādu arhitektūru izmanto Laravel, paskaidro kā tā strādā: 
Laravel izmanto MVC (model, view, controller) arhitektūru, klients veic pieprasījumu, controlleris saņem pieprasījumu, izmanto modeli lai iegūtu vajadzīgo un atgriež vajadzīgo 

• Kas ir ORM, kāpēc to izmanto tīra SQL vietā? 
Object relational mapping ļauj izstrādātājiem darboties ar datubāzi izmantojot OOP principus un nerakstot sql pieprasījumus

• Uzraksti Eloquent ORM pieprasījumu modelim User, kur nepieciešams iegūt visus lietotājus kuriem reitings ir lielāks par 4. Lietotāju tabulas struktūra:
User::where('rating', '>', 4)->get();
