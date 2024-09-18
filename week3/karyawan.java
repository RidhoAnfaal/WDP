package week3;

public class karyawan { // harus dimulai huruf besar

    private String kode_karyawan; // ganti dengan kodeKaryawan
    private String Nama; // ganti dengan nama;
    double gaji = 2000000; // tambah private

    karyawan(String nama, String kode) { // harus dimulai dengan hurf besar
        setnama(nama); // setNama
        setkode(kode);// setKode
    }

    void absen() {
        System.out.println("Saya hadir");
    }
}