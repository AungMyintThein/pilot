select * from (Select country.Country, atmmachines.* from country 
				left outer join atmmachines 
				on country.ISO3 = atmmachines.ISO3) as a
left outer join shadoweconomies on a.ISO3 = shadoweconomies.ISO3 and a.year = shadoweconomies.year;

select * from country left outer join atmmachines on country.ISO3 = atmmachines.ISO3 left outer join shadoweconomies on country.ISO3 = shadoweconomies.ISO3;

SELECT @row := @row + 1 as row from (SELECT @row := 0) r ;

select * from Country join year;

select * from Country join year where year > 2000 and year <= 2010;

/* getting the country with range of year with data and empty row*/

select Country.Country, Country.ISO3, Country.year, atmmachines.atmmachines from 
(SELECT * FROM Country JOIN year where year > 2000 and year <=2010) Country
left outer join atmmachines on Country.ISO3 = atmmachines.ISO3 and Country.year = atmmachines.year;