// Import library and file
#include <bits/stdc++.h>
#include "DPR.cpp"

int main()
{
    list<DPR> anggotaDPRList =
    {
        DPR("01", "H. IRMAWAN, S.Sos, M.M.", "Komisi I", "PKB"),
        DPR("02", "ZURISTYO FIRMADATA, S.E., M.M.", "Komisi II", "Nasdem"),
        DPR("03", "ZULKIFLI HASAN, SE., M.M.", "Komisi II", "PAN")
    };
    DPR dpr;

    int pilihan;
    do
    {
        dpr.tampilkanDaftarAnggota(anggotaDPRList);
        cout << "\nMenu :\n";
        cout << "1. Tambah Anggota DPR\n";
        cout << "2. Ubah Anggota DPR\n";
        cout << "3. Hapus Anggota DPR\n";
        cout << "0. Keluar\n";
        cout << "Masukan pilihan : ";
        cin >> pilihan;

        switch (pilihan)
        {
            case 1:
                dpr.tambahAnggota(anggotaDPRList);
                break;
            case 2:
                dpr.ubahAnggota(anggotaDPRList);
                break;
            case 3:
                dpr.hapusAnggota(anggotaDPRList);
                break;
            case 0:
                cout << "Terima Kasih\n";
                break;
            default:
                cout << "Pilihan tidak valid.\n";
                break;
        }
    } while (pilihan != 0);

    return 0;
}
